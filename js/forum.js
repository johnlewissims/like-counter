import {extend} from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard'
import UserPage from 'flarum/components/UserPage'
import CommentPost from 'flarum/components/CommentPost'
import Button from 'flarum/components/Button'
import icon from 'flarum/helpers/icon';

app.initializers.add('ejin/like-counter', () => {
  extend(UserCard.prototype, 'infoItems', function (items) {

    const likes = this.props.user.data.attributes.ejinLikeCount;
    const comments = this.props.user.data.attributes.commentCount;
    //console.log(this.props.user.data.attributes);

    items.add('ejin-like-counter', m('span', [icon('fas fa-thumbs-up'), ' ', likes, ' Likes']));
    items.add('ejin-like-counter-2', m('span', [icon('fas fa-comments'), ' ', comments, ' Comments']));
  });

  extend(CommentPost.prototype, 'headerItems', function (items) {
    const post = this.props.post;
    const likes = 233;
    const comments = 4;
    //app.store.find('users', this.props.post.data.relationships.user.data.id).then((val) => console.log(val));

    //items.add('ejin-like-counter-3', m('span', [icon('fas fa-comments'), ' ', '9', ' Comments']));
    //console.log(user)
    //var comments =

    //items.add('ejin-like-counter', m('span', [icon('fas fa-thumbs-up'), ' ', likes, ' Likes Recieved']));
  });
});
