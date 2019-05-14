<?php

namespace app\controllers;

use app\models\Post;
use app\models\PostForm;
use yii\web\Controller;

class RedditController extends Controller {
    public function actionIndex() {

        $posts = Post::find()->all();
//        $posts = [new Post('first'), new Post('second')];
        return $this->render('index',['posts' => $posts] );
    }

    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionAdd()
    {
        return $this->render('add', [
            'postForm' => new PostForm()
        ]);
    }

    public function actionSave()
    {
        $data = \Yii::$app->request->post();
        $post = new Post();
        $post->attributes = $data['PostForm'];
        if ($post->save()) {
            return $this->redirect('index');
        } else {
            var_dump($post->errors);
        }
    }

    public function actionDelete($id)
    {
        $post = Post::findOne($id);
        $post->delete();
        return $this->redirect('index');
    }

    public function actionEdit($id)
    {
        $post = Post::find()
            ->where(['=', 'id', $id])
            ->one();
        return $this->render('edit', [
            'postForm' => new PostForm([
                'title' => $post->title,
                'content' => $post->content,
            ]),
            'id' => $id,
        ]);
    }

    public function actionUpdate($id)
    {
        $data = \Yii::$app->request->post();
        $post = Post::find()
            ->where(['=', 'id', $id])
            ->one();
        $post->attributes = $data['PostForm'];
        if ($post->save()) {
            return $this->redirect('index');
        } else {
            var_dump($post->errors);
        }
    }

    public function actionLike($id)
    {
        $post = Post::findOne($id);
        $post->likes++;
        $post->save();
        return $this->redirect('index');
    }

    public function actionDislike($id)
    {
        $post = Post::findOne($id);
        $post->likes--;
        $post->save();
        return $this->redirect('index');
    }


}