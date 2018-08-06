.. _add_host:

=================
Adicionar um host
=================

Sua plataforma esta agora pronta para monitorar seus primeiros servidores ou equipamentos de rede, mas você ainda não sabe como. Não se preocupe! É muito simples iniciar o monitoramento.

Primeiro, :ref:`conecte<centreon_login>` a sua interface Centreon web com uma conta de administrador ou uma conta que permita você gerenciamento os objetos a serem monitorados.

Vá até o menu **Configuration > Hosts > Hosts** e clique no botão **Add**:

.. image:: /_static/images/quick_start/add_host_menu.png
    :align: center

Você terá acesso a um formulário para definir o seu equipamento para monitorar, mas nem todos os campos são necessários!

Para iniciar o monitoramento do seu equipamento, configure:

* O nome do objeto no campo **Host Name**
* Descrição do seu objeto no campo **Alias**
* Configure o endereço de IP ou Hostname (DNS) no campo **IP Address / DNS**
* Clique no botão **+ Add a new entry** e selecione **generic-host**
* Clique no botão **Yes** para o campo **Create Services linked to the Template too**

.. image:: /_static/images/quick_start/add_host_form.png
    :align: center

Salve as modificações clicando no botão **Save**.

.. image:: /_static/images/quick_start/add_host_list.png
    :align: center

O Host esta agora definido na sua interface Centreon web, porém o motor de monitoramento ainda não esta monitorando ele!

Você deve agora :ref:`gerar a configuração, exportar e enviar para o motor de monitoramento (poller)<deployconfiguration>`.

Você pode ver o resultado no menu **Monitoring > Status Details > Hosts**:

.. image:: /_static/images/quick_start/add_host_monitoring.png
    :align: center
