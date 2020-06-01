import SettingsModal from 'flarum/components/SettingsModal';

export default class EjinSettingsModal extends SettingsModal {
	className() {
		return 'EjinSettingsModal Modal--small';
	}

	title() {
		return 'Like Counter';
	}

	form() {
		return [
			<div className="Form-group">
				<label>Like Count Caption</label>
				<input className="FormControl" bidi={this.setting('like-counter.caption')}/>
			</div>,
      <div className="Form-group">
				<label>Display Under Comments?</label>
				<input type="checkbox" className="" bidi={this.setting('like-counter.display_under_comments')}/>
			</div>
		];
	}
}
