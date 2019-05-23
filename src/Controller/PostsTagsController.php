<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostsTags Controller
 *
 * @property \App\Model\Table\PostsTagsTable $PostsTags
 *
 * @method \App\Model\Entity\PostsTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsTagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags', 'Posts']
        ];
        $postsTags = $this->paginate($this->PostsTags);

        $this->set(compact('postsTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postsTag = $this->PostsTags->get($id, [
            'contain' => ['Tags', 'Posts']
        ]);

        $this->set('postsTag', $postsTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postsTag = $this->PostsTags->newEntity();
        if ($this->request->is('post')) {
            $postsTag = $this->PostsTags->patchEntity($postsTag, $this->request->getData());
            if ($this->PostsTags->save($postsTag)) {
                $this->Flash->success(__('The posts tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts tag could not be saved. Please, try again.'));
        }
        $tags = $this->PostsTags->Tags->find('list', ['limit' => 200]);
        $posts = $this->PostsTags->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postsTag', 'tags', 'posts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postsTag = $this->PostsTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postsTag = $this->PostsTags->patchEntity($postsTag, $this->request->getData());
            if ($this->PostsTags->save($postsTag)) {
                $this->Flash->success(__('The posts tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts tag could not be saved. Please, try again.'));
        }
        $tags = $this->PostsTags->Tags->find('list', ['limit' => 200]);
        $posts = $this->PostsTags->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postsTag', 'tags', 'posts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postsTag = $this->PostsTags->get($id);
        if ($this->PostsTags->delete($postsTag)) {
            $this->Flash->success(__('The posts tag has been deleted.'));
        } else {
            $this->Flash->error(__('The posts tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
