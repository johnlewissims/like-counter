import {extend} from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard'
import UserPage from 'flarum/components/UserPage'
import CommentPost from 'flarum/components/CommentPost'
import Button from 'flarum/components/Button'
import icon from 'flarum/helpers/icon';

app.initializers.add('ejin/like-counter', () => {
  extend(UserCard.prototype, 'infoItems', function (items) {
    const caption = app.forum.attribute('like-counter.caption');
    const likes = this.props.user.data.attributes.ejinLikeCount;
    items.add('ejin-like-counter', m('span', likes, ' ', caption, ' ', [icon('fas fa-thumbs-up')]));
  });

  extend(CommentPost.prototype, 'headerItems', function (items) {
    if(app.forum.attribute('like-counter.display_under_comments') == 1) {
      const likes = this.props.post.data.attributes.ejinLikeCount;
      items.add('ejin-like-counter-post', m('span', likes, ' ', [icon('fas fa-thumbs-up') ]));
    }
  });
});
