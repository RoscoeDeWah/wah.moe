<hr>
<div class="footer" role="contentinfo">
    <a href="https://www.debian.org/">
        <img src="{{ URL::asset('images/debian.gif') }}"
             class="pixel" width="88" height="31" alt="Powered by Debian">&nbsp;
    </a>
    <a href="https://dimden.dev/">
        <img src="https://dimden.dev/services/images/88x31.gif" width="88" height="31"
             class="pixel" alt="dimden.dev">
    </a>&nbsp;
    <a href="https://www.linux.org/">
        <img src="{{ URL::asset('images/buttons/linuxnow.gif') }}" width="88"
             class="pixel" height="31" alt="Linux NOW!">
    </a>&nbsp;
    <a href="https://www.vim.org/">
        <img src="{{ URL::asset('images/buttons/vim.gif') }}" width="88" height="31"
             class="pixel" alt="vim">
    </a>&nbsp;
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="{{ URL::asset('images/buttons/vcss-blue.gif') }}" width="88" height="31"
             class="pixel" alt="Valid CSS!">
    </a>&nbsp;
    <a href="https://wiby.me/">
        <img src="{{ URL::asset('images/buttons/wiby.gif') }}" width="88" height="31"
             class="pixel" alt="Wiby - Search Engine for the Classic Web">
    </a><br>
    This site is best viewed at 1024x768 with 16-bit color or better<br>
    &copy; floppydisk 2021-{{ date('Y') }}, v{{ config('app.version') }}, <a
        href="https://github.com/floppydisk05/diskfloppy.me">Source</a>,
	Served by {{ gethostname() }}<br>
</div>
