import {extend} from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard'
import UserPage from 'flarum/components/UserPage'
import Button from 'flarum/components/Button'
import icon from 'flarum/helpers/icon';

app.initializers.add('ejin/like-counter', () => {
  //console.log('[ejin/like-counter] Hello, forum!');
  //console.log(UserCard)
  extend(UserCard.prototype, 'infoItems', function (items) {
    // items.add('ejin-like-counter', Button.component({
    //     icon: 'fas fa-thumbs-up',
    //     children: app.translator.trans('Test'),
    //     onclick() {
    //         //console.log('Test')
    //     },
    // }));

    var likes = 233;
    var comments = this.props.user.data.attributes.commentCount;

    //items.add('ejin-like-counter', m('span', [icon('fas fa-thumbs-up'), ' ', likes, ' Likes Recieved']));
    items.add('ejin-like-counter-2', m('span', [icon('fas fa-comments'), ' ', comments, ' Comments']));
  });
});
