{{--<li class="{{ Request::is('classes*') ? 'active' : '' }}">--}}
{{--    <a href="{!! route('classes.index') !!}"><i class="fa fa-edit"></i><span>Classes</span></a>--}}
{{--</li>--}}
{{--General Button--}}
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i><span>General</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
{{--Menu Options--}}
    <ul class="treeview-menu">
        <li class="{{ Request::is('classes*') ? 'active' : '' }}">
            <a href="{!! route('classes.index') !!}"><i class="fa fa-leanpub"></i><span>Classes</span></a>
        </li>
        <li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
            <a href="{!! route('classrooms.index') !!}"><i class="fa fa-edit"></i><span>Classrooms</span></a>
        </li>
        <li class="{{ Request::is('levels*') ? 'active' : '' }}">
            <a href="{!! route('levels.index') !!}"><i class="fa fa-level-up"></i><span>Levels</span></a>
        </li>
        <li class="{{ Request::is('batches*') ? 'active' : '' }}">
            <a href="{!! route('batches.index') !!}"><i class="fa fa-id-badge"></i><span>Batches</span></a>
        </li>
        <li class="{{ Request::is('shifts*') ? 'active' : '' }}">
            <a href="{!! route('shifts.index') !!}"><i class="fa fa-edit"></i><span>Shifts</span></a>
        </li>
        <li class="{{ Request::is('courses*') ? 'active' : '' }}">
            <a href="{!! route('courses.index') !!}"><i class="fa fa-edit"></i><span>Courses</span></a>
        </li>
        <li class="{{ Request::is('times*') ? 'active' : '' }}">
            <a href="{!! route('times.index') !!}"><i class="fa fa-edit"></i><span>Times</span></a>
        </li>
        <li class="{{ Request::is('academics*') ? 'active' : '' }}">
            <a href="{!! route('academics.index') !!}"><i class="fa fa-edit"></i><span>Academics</span></a>
        </li>
        <li class="{{ Request::is('days*') ? 'active' : '' }}">
            <a href="{!! route('days.index') !!}"><i class="fa fa-edit"></i><span>Days</span></a>
        </li>
    </ul>
</li>

{{--General Button--}}
<li class="treeview">
    <a href="#">
        <i class="fa fa-clock-o"></i><span>Schedule</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    {{--Menu Options--}}
    <ul class="treeview-menu">
        <li class="{{ Request::is('class_assignings*') ? 'active' : '' }}">
            <a href="{!! route('classAssignings.index') !!}"><i class="fa fa-edit"></i><span>Class Assignings</span></a>
        </li>
        <li class="{{ Request::is('class_schedulings*') ? 'active' : '' }}">
            <a href="{!! route('classSchedulings.index') !!}"><i class="fa fa-edit"></i><span>Class Schedulings</span></a>
        </li>
    </ul>
</li>


<li class="{{ Request::is('admissions*') ? 'active' : '' }}">
    <a href="{!! route('admissions.index') !!}"><i class="fa fa-graduation-cap"></i><span>Admission</span></a>
</li>
<li class="{{ Request::is('faculties*') ? 'active' : '' }}">
    <a href="{!! route('faculties.index') !!}"><i class="fa fa-user-circle"></i><span>Faculty</span></a>
</li>
<li class="{{ Request::is('attendances*') ? 'active' : '' }}">
    <a href="{!! route('attendances.index') !!}"><i class="fa fa-calendar"></i><span>Attendance</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('transactions.index') !!}"><i class="fa fa-money"></i><span>Transactions</span></a>
</li>
