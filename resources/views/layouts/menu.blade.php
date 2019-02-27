@if(Auth::user()->role!=3)
<li class="{{ Request::is('personaldatas*') ? 'active' : '' }}">
    <a href="{!! route('personaldatas.index') !!}"><i class="fa fa-edit"></i><span>Personaldatas</span></a>
</li>
@endif
@if(Auth::user()->role==2)
<li class="{{ Request::is('agents*') ? 'active' : '' }}">
    <a href="{!! route('agents.index') !!}"><i class="fa fa-edit"></i><span>Agents</span></a>
</li>
<li >
    <a href="/showall"><i class="fa fa-edit"></i><span>Agents Performance</span></a>
</li>
@endif
@if(Auth::user()->role==3)
    <li class="{{ Request::is('customers*') ? 'active' : '' }}">
        <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
    </li>
@endif
