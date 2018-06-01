<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gravedades Controller
 *
 * @property \App\Model\Table\GravedadesTable $Gravedades
 *
 * @method \App\Model\Entity\Gravedad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GravedadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gravedades = $this->paginate($this->Gravedades);

        $this->set(compact('gravedades'));
    }

    /**
     * View method
     *
     * @param string|null $id Gravedad id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gravedad = $this->Gravedades->get($id, [
            'contain' => ['Casos']
        ]);

        $this->set('gravedad', $gravedad);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gravedad = $this->Gravedades->newEntity();
        if ($this->request->is('post')) {
            $gravedad = $this->Gravedades->patchEntity($gravedad, $this->request->getData());
            if ($this->Gravedades->save($gravedad)) {
                $this->Flash->success(__('The gravedad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gravedad could not be saved.Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('gravedad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gravedad id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gravedad = $this->Gravedades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gravedad = $this->Gravedades->patchEntity($gravedad, $this->request->getData());
            if ($this->Gravedades->save($gravedad)) {
                $this->Flash->success(__('The gravedad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gravedad could not be saved.Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('gravedad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gravedad id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gravedad = $this->Gravedades->get($id);
        if ($this->Gravedades->delete($gravedad)) {
            $this->Flash->success(__('The gravedad has been deleted.'));
        } else {
            $this->Flash->error(__('The gravedad could not be deleted.Por favor, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
