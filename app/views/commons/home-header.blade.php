<div id="header">
<div id="section">
    <div><a href="{{ URL::to('/') }}"><img src="assets/images/logo.gif" alt="" /></a></div>
    <span>ats-support@umak.com.ph <br />
    <br />
    + 800 000 000 0000</span> 
</div>
<ul>
    <li class="@if( $title == 'Home') current @endif">
        <a href="{{ URL::to('/') }}/index">Home</a>
    </li>
    <li class="@if( $title == 'About') current @endif">
        <a href="{{ URL::to('/') }}/about">About Us</a>
    </li>
    <li class="@if( $title == 'Alumni') current @endif">
        <a href="{{ URL::to('/') }}/alumni">Alumni</a>
    </li>
    <li class="@if( $title == 'Announcements') current @endif">
        <a href="{{ URL::to('/') }}/announcements">Announcements</a>
    </li>
    <li class="@if( $title == 'School Calendar') current @endif">
        <a href="{{ URL::to('/') }}/school-calendar">School Calendar</a>
    </li>
    <li class="@if( $title == 'Contacts') current @endif">
        <a href="{{ URL::to('/') }}/contacts">Contact us</a>
    </li>
</ul>
</div>