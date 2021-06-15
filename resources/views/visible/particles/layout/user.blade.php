<div class="header__profile">
    <div class="header__profile-box flex">
        <div class="header__profile-name">{{ $user->getLittleName() }}</div>
        <div class="header__profile-arrow">
            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.7261 6.52333C3.75668 6.56774 3.7976 6.60405 3.84533 6.62914C3.89306 6.65423 3.94618 6.66734 4.0001 6.66734C4.05402 6.66734 4.10714 6.65423 4.15487 6.62914C4.2026 6.60405 4.24352 6.56774 4.2741 6.52333L7.2741 2.18999C7.30883 2.14001 7.32919 2.08147 7.33298 2.02073C7.33677 1.95999 7.32384 1.89937 7.2956 1.84546C7.26735 1.79155 7.22488 1.74641 7.17278 1.71494C7.12068 1.68348 7.06096 1.6669 7.0001 1.66699H1.0001C0.939382 1.66724 0.87988 1.68404 0.827995 1.71558C0.776109 1.74712 0.733802 1.79221 0.705624 1.84599C0.677446 1.89978 0.664463 1.96022 0.668071 2.02084C0.671679 2.08145 0.691741 2.13993 0.726101 2.18999L3.7261 6.52333Z" fill="#5E7C8D"/>
            </svg>
        </div>
    </div>
    <div class="header__profile-block">
        <a href="{{ route('logout') }}" class="header__profile-link">logout</a>
        <a href="{{ route('visible.personal.index') }}" class="header__profile-link">Personal area</a>
    </div>
</div>
