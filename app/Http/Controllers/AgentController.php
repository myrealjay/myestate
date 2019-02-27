<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Repositories\AgentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Models\Customer;


class AgentController extends AppBaseController
{
    /** @var  AgentRepository */
    private $agentRepository;

    public function __construct(AgentRepository $agentRepo)
    {
        $this->agentRepository = $agentRepo;
    }

    /**
     * Display a listing of the Agent.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->agentRepository->pushCriteria(new RequestCriteria($request));
        $agents = $this->agentRepository->all();

        return view('agents.index')
            ->with('agents', $agents);
    }

    public function showall()
    {
        $agents = $this->agentRepository->all();
        $buffer=[];
        foreach($agents as $agent){
            $user=User::where('email',$agent->email)->get()->first();
            $customers=Customer::where('agent',$user->id)->get();
            $agent['customers']=$customers;
            array_push($buffer,$agent);
        }
        return view('showall',['agents'=>$buffer]);
    }
    /**
     * Show the form for creating a new Agent.
     *
     * @return Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created Agent in storage.
     *
     * @param CreateAgentRequest $request
     *
     * @return Response
     */
    public function store(CreateAgentRequest $request)
    {
        $input = $request->except(['pic','password']);

        $agent = $this->agentRepository->create($input);

        //saving into users table, split the names into first, sur and middle
        $name=explode(" ",$input['fullname']);
        $surname=$name[0];
        $firstname=$name[1];
        $middlename='';
        $pic='';
        $title='';

        if(count($name)>2){
            $middlename=$name[2];
        }
        $gender=$input['sex'];
        if($gender=='Male'){
            $title='Mr';
        }
        else{
            $title='Miss';
        }
        $email=$input['email'];
        $password=Hash::make($request->password);

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
            $pic=$imageName;
        }

        User::create([
            'title'=>$title,
            'surname'=>$surname,
            'firstname'=>$firstname,
            'middlename'=>$middlename,
            'email'=>$email,
            'password'=>$password,
            'address'=>$request->address,
            'gender'=>$gender,
            'phone'=>$request->phone,
            'password'=>$password,
            'pic'=>$pic,
            'role'=>3
        ]);

       

        Flash::success('Agent saved successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Display the specified Agent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agent = $this->agentRepository->findWithoutFail($id);
        $user=User::where('email',$agent->email)->get()->first();

        $customers=Customer::where('agent',$user->id)->get();
        $counter=count($customers);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.show')->with(['agent'=> $agent,'counter'=>$counter,'customers'=>$customers]);
    }

    /**
     * Show the form for editing the specified Agent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agent = $this->agentRepository->findWithoutFail($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.edit')->with('agent', $agent);
    }

    /**
     * Update the specified Agent in storage.
     *
     * @param  int              $id
     * @param UpdateAgentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgentRequest $request)
    {
        $agent = $this->agentRepository->findWithoutFail($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $agent = $this->agentRepository->update($request->except(['pic','password']), $id);

        $user=User::where('email',$request->email)->get()->first();

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
            User::find($user->id)->update(['pic' => $imageName]);

        }

        Flash::success('Agent updated successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Remove the specified Agent from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agent = $this->agentRepository->findWithoutFail($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $this->agentRepository->delete($id);

        Flash::success('Agent deleted successfully.');

        return redirect(route('agents.index'));
    }
}
