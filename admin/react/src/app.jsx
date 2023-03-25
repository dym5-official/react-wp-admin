import axios from 'redaxios';
import { useState } from 'react';

export default function App() {
    const [count, setCount] = useState(0);
    const [loading, setLoading] = useState(false);
    const [message, setMessage] = useState('');

    const handleAPICall = () => {
        setLoading(true);
        setMessage('');

        axios.get(`${ajaxurl}?action=react-wp-admin-ajax`)
            .then(({ data }) => {
                setMessage(`Hi ${data.name}! ${data.message}`);
            })
            .catch(() => {
               setMessage('Failed to call API, maybe you are disconnected!');
            })
            .finally(() => {
                setLoading(false);
            });
    }

    return (
        <div>
            <h3>React WP Admin</h3>

            <div className="react-wp-admin">
                <div>
                    <div>
                        <strong>Click the button below!</strong>
                    </div>
                    <button onClick={() => setCount(count + 1)}>Count: {count}</button>
                </div>
                <div>
                    <div>
                        <strong>Click the button below!</strong>
                    </div>
                    <button onClick={handleAPICall}>{loading ? 'Calling API ..' : 'Call API'}</button>
                    <div>{message}</div>
                </div>
            </div>

            <pre>
                <strong>Start editing:</strong> admin/react/app.jsx
            </pre>

            <div>
                For documentation: <a href="https://github.com/dym5-official/react-wp-admin" rel="noreferrer" target="_blank">https://github.com/dym5-official/react-wp-admin</a>
            </div>
        </div>
    )
}