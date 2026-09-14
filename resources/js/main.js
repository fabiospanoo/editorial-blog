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