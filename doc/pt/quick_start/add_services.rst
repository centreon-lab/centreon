====================
Adicionar um Serviço
====================

Você já tem um :ref:`host adicionado<add_host>` e agora você precisa monitorar alguns indicadores.

.. note::
    Um indicador tem a nomeclatura **service** no Centreon.

Vá para o menu **Configuration  >  Services  >  Services by host** e clique no botão **Add**:

.. image:: /_static/images/quick_start/add_service_menu.png
    :align: center

Para adicionar um serviço em um host, você tem que definir somente três campos:

* Selecione o host no campo **Linked with Hosts**
* Defina o nome do serviço no campo **Description**
* Selecione um template pré-definido de serviço, por exemplo Base-Ping-LAN, no campo **Service Template**

.. note::
    Após selecionar um template de serviço, um novo campo aparecerá. Os valores descrevem os argumentos para usar no monitoramento do seu serviço.
    Na maioria dos casos são limites para alerta. Você pode utilizar esses valores padrões ou substitui-los para os seus.

.. image:: /_static/images/quick_start/add_service_form.png
    :align: center

Salve as modificações clicando no botão **Save**.

.. image:: /_static/images/quick_start/add_service_list.png
    :align: center

O serviço agora esta definido na sua interface Centreon web, porém o motor de monitoramento não esta monitorando ainda!

Você deve agora :ref:`gerar a configuração, exportar e enviar para o motor de monitoramento (poller)<deployconfiguration>`.

Você pode ver o resultado no menu **Monitoring > Status Details > Services**:

.. image:: /_static/images/quick_start/add_service_monitoring.png
    :align: center
