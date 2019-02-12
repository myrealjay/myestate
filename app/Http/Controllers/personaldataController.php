<?php

namespace App\Http\Controllers;
use Mail;

use App\Http\Requests\CreatepersonaldataRequest;
use App\Http\Requests\UpdatepersonaldataRequest;
use App\Repositories\personaldataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\personaldata;
use App\User;

class personaldataController extends AppBaseController
{
    /** @var  personaldataRepository */
    private $personaldataRepository;

    public function __construct(personaldataRepository $personaldataRepo)
    {
        $this->personaldataRepository = $personaldataRepo;
    }

    /**
     * Display a listing of the personaldata.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $userid=\Auth::user();

        $lenn=0;
        $pic=$userid->pic;

        if($pic !=''){
            $pic='images/'.$pic;
        }

        $this->personaldataRepository->pushCriteria(new RequestCriteria($request));

        if($userid->role==1){
            $personaldatas = personaldata::where('userid',$userid->id)->get();
            if(count($personaldatas)>0){
                $lenn=1;
            }
        }
        else{
            $personaldatas=$this->personaldataRepository->all();
        }
        //$this->personaldataRepository->find(\Auth::user()->id);

        return view('personaldatas.index')
            ->with('personaldatas', $personaldatas)->with('lenn',$lenn)->with('pic',$pic);
    }

    public function search(Request $request){
        $userid=\Auth::user();

        $lenn=0;
        $pic=$userid->pic;

        if($pic !=''){
            $pic='images/'.$pic;
        }

        $criteria=$request->search;

        $user=User::where('email',$criteria)->orWhere('phone',$criteria)->get()->first();

        $personaldatas = personaldata::where('userid',$user->id)->get();
        return view('personaldatas.index')
            ->with('personaldatas', $personaldatas)->with('lenn',$lenn)->with('pic',$pic);
    }

    /**
     * Show the form for creating a new personaldata.
     *
     * @return Response
     */
    public function create()
    {
        return view('personaldatas.create');
    }

    /**
     * Store a newly created personaldata in storage.
     *
     * @param CreatepersonaldataRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonaldataRequest $request)
    {
        $input = $request->except('pic');
        $input['userid']=\Auth::user()->id;

        $personaldata = $this->personaldataRepository->create($input);

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
            User::find(\Auth::user()->id)->update(['pic' => $imageName]);

        }

        /*$email = 'olayinka.binuyo@okbcoy.com.ng';
        $f_name = \Auth::user()->firstname;
        $l_name = \Auth::user()->surname;
        $phone = \Auth::user()->phone;
        $cust_email=\Auth::user()->email;
       
        Mail::send('message', ['email' => $email,'f_name' => $f_name, 'l_name' => $l_name,'phone'=>$phone],
            function($mail) use ($email){
                $mail->from('nwachukwujames7@gmail.com',"Bethel estate");
                $mail->to($email, "Mr Yinka");
                $mail->subject('PURCHASE NOTIFICATION');
            });*/

        Flash::success('Personaldata saved successfully.');

        return redirect(route('personaldatas.index'));
    }

    /**
     * Display the specified personaldata.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $userid=\Auth::user();

        $lenn=0;
        $personaldata = $this->personaldataRepository->findWithoutFail($id);

        $user=User::where('id',$personaldata->userid)->get()->first();
    
        $pic='../images/'.$user->pic;


        if (empty($personaldata)) {
            Flash::error('Personaldata not found');

            return redirect(route('personaldatas.index'));
        }

        return view('personaldatas.show')->with('personaldata', $personaldata)->with('pic',$pic)->with('user',$user)->with('lenn',$lenn);
    }

    /**
     * Show the form for editing the specified personaldata.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaldata = $this->personaldataRepository->findWithoutFail($id);

        if (empty($personaldata)) {
            Flash::error('Personaldata not found');

            return redirect(route('personaldatas.index'));
        }

        return view('personaldatas.edit')->with('personaldata', $personaldata);
    }

    /**
     * Update the specified personaldata in storage.
     *
     * @param  int              $id
     * @param UpdatepersonaldataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepersonaldataRequest $request)
    {
        $personaldata = $this->personaldataRepository->findWithoutFail($id);

        if (empty($personaldata)) {
            Flash::error('Personaldata not found');

            return redirect(route('personaldatas.index'));
        }

        $personaldata = $this->personaldataRepository->update($request->all(), $id);
        
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $imageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
            User::find(\Auth::user()->id)->update(['pic' => $imageName]);

        }


        Flash::success('Personaldata updated successfully.');

        return redirect(route('personaldatas.index'));
    }

    /**
     * Remove the specified personaldata from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaldata = $this->personaldataRepository->findWithoutFail($id);

        if (empty($personaldata)) {
            Flash::error('Personaldata not found');

            return redirect(route('personaldatas.index'));
        }

        $this->personaldataRepository->delete($id);

        Flash::success('Personaldata deleted successfully.');

        return redirect(route('personaldatas.index'));
    }
}
