=======================================
Fazer deploy de serviços de um template
=======================================

No inicio rápido anterior, você :ref:`adicionou um novo host de um template<add_host_template>` usando
o template **OS-Linux-SNMP**. Este template de host implantou os sequintes serviços:

* CPU
* Load
* Memory
* Swap

Porém, alguns indicadores ainda não estão sendo monitorados porque dependem do proprio host,
por exemplo o nome do sistema de arquivos, nomes de interface de rede, etc.

Primeiro, :ref:`conecte<centreon_login>` a sua interface Centreon web com uma conta de administrador ou uma conta que permita você gerenciamento os objetos a serem monitorados.

Vá ao menu **Configuration > Services > Services by host** e clique no botão **Add**:

.. image:: /_static/images/quick_start/add_service_menu.png
    :align: center

Para adicionar um serviço em um host, você tem que definir somente três campos:

* Selecione o host no campo **Linked with Hosts**
* Defina o nome do serviço no campo **Description**, por exemplo **Traffic-eth0** para monitorar o uso de banda de rede da sua interface de rede eth0
* Selecione um template pré-definido de serviço, por exemplo **OS-Linux-Traffic-Generic-Name-SNMP**, no campo **Service Template**

.. note::
    Após selecionar um template de serviço, um novo campo aparecerá. Os valores descrevem os argumentos para usar no monitoramento do seu serviço.
    Na maioria dos casos são limites para alerta. Você pode utilizar esses valores padrões ou substitui-los para os seus.

Modifique o valor da macro **INTERFACENAME** para o nome da interface de rede que você definiu para monitorar, por exemplo **eth0**

.. image:: /_static/images/quick_start/add_svc_template_form.png
    :align: center

Salve as modificações clicando no botão **Save**.

.. image:: /_static/images/quick_start/add_svc_template_list.png
    :align: center

O serviço agora esta definido na sua interface Centreon web, porém o motor de monitoramento não esta monitorando ainda!

Você deve agora :ref:`gerar a configuração, exportar e enviar para o motor de monitoramento (poller)<deployconfiguration>`.

Você pode ver o resultado no menu **Monitoring > Status Details > Services**:

.. image:: /_static/images/quick_start/add_svc_template_monitoring.png
    :align: center
