let editor;
let isEditorInitialized = false;

function initializeEditor(element) {
    if (element) {
        if (isEditorInitialized) {
            editor.toTextArea(); // Clean up existing editor
            isEditorInitialized = false;
        }
        editor = CodeMirror.fromTextArea(element, {
            mode: 'xml',
            theme: 'monokai',
            lineNumbers: true,
            autoCloseTags: true,
            autoCloseBrackets: true,
            matchBrackets: true,
            indentUnit: 4,
            tabSize: 4,
            lineWrapping: true,
            extraKeys: {
                'Tab': 'indentMore',
                'Shift-Tab': 'indentLess',
                'Ctrl-Space': 'autocomplete'
            },
            gutters: ['CodeMirror-linenumbers'],
            styleActiveLine: true,
            matchTags: { bothTags: true },
            foldGutter: true,
            lint: true
        });
        isEditorInitialized = true;
        editor.refresh(); // Force a refresh after initialization
        return editor;
    }
    return null;
}

document.addEventListener('DOMContentLoaded', function() {
    const sourceCodeElement = document.querySelector('#source_code');

    if (sourceCodeElement) {
        loadCodeMirrorResources().then(() => {
            initializeEditor(sourceCodeElement);
        });
    }
});

function loadCodeMirrorResources() {
    return new Promise((resolve, reject) => {
        const resources = [{
                type: 'css',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css'
            },
            {
                type: 'css',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/monokai.min.css'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/xml/xml.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/css/css.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closetag.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closebrackets.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/matchbrackets.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/fold/xml-fold.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/show-hint.min.js'
            },
            {
                type: 'js',
                url: 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/hint/xml-hint.min.js'
            }
        ];

        let loadedCount = 0;

        resources.forEach(resource => {
            if (resource.type === 'css') {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = resource.url;
                link.onload = () => {
                    loadedCount++;
                    if (loadedCount === resources.length) resolve();
                };
                link.onerror = reject;
                document.head.appendChild(link);
            } else if (resource.type === 'js') {
                const script = document.createElement('script');
                script.src = resource.url;
                script.onload = () => {
                    loadedCount++;
                    if (loadedCount === resources.length) resolve();
                };
                script.onerror = reject;
                document.head.appendChild(script);
            }
        });
    });
}
