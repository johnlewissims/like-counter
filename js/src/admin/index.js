import app from 'flarum/app';
import EjinSettingsModal from './components/EjinSettingsModal';

app.initializers.add('like-counter', () => {
	app.extensionSettings['ejin-like-counter'] = () => app.modal.show(new EjinSettingsModal());
});
