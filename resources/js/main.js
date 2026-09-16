const style = document.createElement('style');
style.textContent = `
    ::-webkit-scrollbar {
        display: none;
    }
    * {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
`;
document.head.appendChild(style);

const mask = document.getElementById('mask');
if (mask) {
    const wrapper = document.getElementById('maskwrapper');
    const secret = mask.dataset.secret;
    const audio = document.getElementById('secret-audio');
    const audio2 = document.getElementById('secret-audio2');
    const dialogBody = document.getElementById('dialog-body');

    const deltaruneFont = new FontFace(
        'DeltaruneDialogue',
        'url(/fonts/8bitoperator_jve.woff2)',
        { style: 'normal', weight: '400' }
    );

    deltaruneFont.load().then((loadedFont) => {
        document.fonts.add(loadedFont);
        dialogBody.style.fontFamily = "'DeltaruneDialogue', monospace";
        dialogBody.style.fontSize = '30px';
    }).catch((err) => {
        console.error('Errore durante il caricamento del font:', err);
    });

    const sentences = [
        "( Well, there is a man here. )",
        "( He offered you something. )",
        "( You received an Egg. )"
    ];
    
    let state = 0; 
    let typingTimer = null;
    let isTyping = false; 

    function safePlay(el) {
        if (!el) return;
        el.play().catch((err) => {
            console.error('Errore riproduzione audio:', err);
        });
    }

    function playFadeUp() {
        wrapper.classList.remove('fade-up');
        void wrapper.offsetWidth;
        wrapper.classList.add('fade-up');
    }

    function typeSentence(sentence) {
        dialogBody.textContent = '';
        dialogBody.style.opacity = '1';
        isTyping = true;
        let i = 0;
        
        clearInterval(typingTimer);
        typingTimer = setInterval(() => {
            i++;
            dialogBody.textContent = sentence.slice(0, i);
            if (i >= sentence.length) {
                clearInterval(typingTimer);
                isTyping = false;
            }
        }, 70);
    }

    // Tenta di avviare la musica all'ingresso della pagina
    // (il browser potrebbe bloccarlo finché l'utente non interagisce)
    if (audio) {
        audio.volume = 1;
        audio.muted = false;
        safePlay(audio);
    }

    // MODIFICA QUI: document invece di mask
    document.addEventListener('click', () => {
        if (state < 3 && audio && audio.paused) {
            audio.volume = 1;
            audio.muted = false;
            safePlay(audio);
        }

        if (isTyping) {
            clearInterval(typingTimer);
            dialogBody.textContent = sentences[state - 1];
            isTyping = false;
            return; 
        }

        if (state < 3) {
            typeSentence(sentences[state]);
            state++;
        } else if (state === 3) {
            mask.style.opacity = '0';
            dialogBody.style.opacity = '0';
            if (audio) {
                audio.pause();
                audio.currentTime = 0;
            }
            state++; 
            
            setTimeout(() => {
                mask.src = secret;
                mask.style.opacity = '1';
                playFadeUp();
                if (audio2) {
                    audio2.volume = 1;
                    audio2.muted = false;
                    safePlay(audio2);
                }
            }, 1500); 
        }
    });
}