import ReactDOM from 'react-dom';
import App from './app';

import './styles/styles.css';

ReactDOM
	.createRoot(document.querySelector("#wp-admin-plugin-page-root"))
	.render(<App />);