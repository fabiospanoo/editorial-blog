<x-layout>
    <main>
        <audio id="secret-audio" loop preload="auto">
            <source src="{{ asset('media/MAN.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="secret-audio2" loop preload="auto">
            <source src="{{ asset('media/BITROOTS.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="secret-box">
                <div id="maskwrapper" class="fade-up">
                    <img src="https://deltarune.wiki/images/Man_overworld_tree.gif?cb=15l8og&h=thumb.php&f=Man_overworld_tree.gif" alt="Well, there is a man here. He offered you something. You received an Egg." class="secret-image" id="mask" style="cursor: pointer; transition: opacity 0.2s;" data-original="https://deltarune.wiki/images/Man_overworld_tree.gif?cb=15l8og&h=thumb.php&f=Man_overworld_tree.gif" data-secret="https://static.wikia.nocookie.net/villains/images/e/ea/Amalgamate_friend.gif/revision/latest?cb=20250619182256">
                </div>
                <div id="dialog" class="deltarune-dialog">
                    <div id="dialog-body"></div>
                </div>
            </div>
        </div>
    </main>
</x-layout>