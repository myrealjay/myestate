<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Repositories\CustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Customer;
use App\User;

class CustomerController extends AppBaseController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Customer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->customerRepository->pushCriteria(new RequestCriteria($request));
        //$customers = $this->customerRepository->all();

        $user=\Auth::user();
        $customers=Customer::where('agent',$user->id)->get();

        $counter=count($customers);

        return view('customers.index')
            ->with('customers', $customers)->with('counter',$counter);
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $user=\Auth::user();
        $customers=Customer::where('agent',$user->id)->get();
        $counter=count($customers);

        if($counter>=23){
            Flash::error('You have exceeded the number of sales to make');
        }
        else{
            $input = $request->all();
            $input['agent']=\Auth::user()->id;

            $customer = $this->customerRepository->create($input);

            $users=User::where('role','!=',1)->get();
            $emails=[];
            foreach($users as $user){
                array_push($emails,$user->email);
            }
            
            $newname=$user->surname.' '.$user->firstname.' '.$user->middlename;
            Mail::send('message2', ['fullname' =>$newname ,'phone' => $user->phone, 'custname' =>$input['fullname'],'custphone'=>$input['phone'],'apartment'=>$input['apertment']],
                function($mail) use ($emails){
                    $mail->from('esmafconference@gmail.com',"Bethel estate");
                    $mail->to($emails, "Bethel estate");
                    $mail->subject('PURCHASE NOTIFICATION');
                });


            Flash::success('Customer saved successfully.');
        }

        
        return redirect(route('customers.index'));
    }

    /**
     * Display the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerRequest $request)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        $customer = $this->customerRepository->update($request->all(), $id);

        Flash::success('Customer updated successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        $this->customerRepository->delete($id);

        Flash::success('Customer deleted successfully.');

        return redirect(route('customers.index'));
    }
}
