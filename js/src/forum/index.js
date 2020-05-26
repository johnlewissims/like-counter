import {extend} from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard'
import UserPage from 'flarum/components/UserPage'
import CommentPost from 'flarum/components/CommentPost'
import Button from 'flarum/components/Button'
import icon from 'flarum/helpers/icon';

app.initializers.add('ejin/like-counter', () => {
  extend(UserCard.prototype, 'infoItems', function (items) {
    const comments = this.props.user.data.attributes.commentCount;
    app.request({
        url: app.forum.attribute('apiUrl') + '/users/' + this.props.user.id(),
        method: 'GET',
    }).then(data => {
      items.add('ejin-like-counter', m('span', [icon('fas fa-thumbs-up'), ' ', data, ' Likes']));
    });
  });

  extend(CommentPost.prototype, 'headerItems', function (items) {
  });
});
