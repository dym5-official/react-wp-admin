const path = require('path');
const fs = require('fs');
const esbuild = require('esbuild');
const eslint = require('esbuild-plugin-eslint');

(async () => {
    const entryFile = path.join(__dirname, '..', 'src', 'index.jsx');
    const outDir = path.join(__dirname, '..', '..', 'assets');

    if(!fs.existsSync(outDir)) {
        fs.mkdirSync(outDir, { recursive: true });
    }

    await esbuild.build({
        entryPoints: [entryFile],
        bundle: true,
        minify: true,
        sourcemap: true,
        format: 'cjs',
        jsx: 'automatic',
        outfile: path.join(outDir, 'bundle.js'),

        plugins: [
            eslint()
        ]
    });
})();