<li class="nav-item {{ Request::is('faqs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('faqs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Faqs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('exams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('exams.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Exams</span>
    </a>
</li>
<li class="nav-item {{ Request::is('events*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('events.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Events</span>
    </a>
</li>
<li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('invoices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Invoices</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tickets*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tickets.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tickets</span>
    </a>
</li>
