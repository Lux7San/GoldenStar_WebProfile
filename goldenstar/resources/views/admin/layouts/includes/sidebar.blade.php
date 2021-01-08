<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/home" class="{{request()->is('admin/home') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="/admin/event" class="{{request()->is('admin/event') ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Event</span></a></li>
						<li><a href="/admin/profile" class="{{request()->is('admin/profile') ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span>Profile</span></a></li>
						<li><a href="/admin/galery" class="{{request()->is('admin/galery') ? 'active' : ''}}"><i class="lnr lnr-license"></i> <span>Galery</span></a></li>
						<li><a href="/admin/yt-link" class="{{request()->is('admin/yt-link') ? 'active' : ''}}"><i class="lnr lnr-film-play"></i> <span>Youtube Link</span></a></li>
					</ul>
				</nav>
			</div>
		</div>