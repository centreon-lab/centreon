=================================
Leitor Nagios para Centreon CLAPI
=================================

**Leitor Nagios para Centreon CLAPI** é um projeto gratuito e de código aberto para analisar
Arquivos de configuração Nagios CFG e para transformar a configuração de monitoramento
para o comando do Centreon CLAPI e importar a configuração para o Centreon Web
interface.

Pre-requisitos
==============

Primeiro de tudo, você deve ter um servidor do Centreon instalado e pronto para uso. Por favor veja
a documentação :ref:`para instalar um servidor Centreon<install>` baseado no Centreon.

Instalação
==========
Este script usa a biblioteca Perl-Nagios-Object para ler os arquivos de configuração CFG. Para
instalar ele é preciso acompanhar as etapas no seu servidor Nagios(R):

CentOS:

  $ yum install perl-Module-Build

Debian:

  $ apt-get install libmodule-build-perl

  $ cd /tmp
  $ wget http://search.cpan.org/CPAN/authors/id/D/DU/DUNCS/Nagios-Object-0.21.20.tar.gz
  $ tar xzf Nagios-Object-0.21.20.tar.gz
  $ cd Nagios-Object-0.21.20
  $ perl Build.PL
  $ ./Build
  $ ./Build test
  $ ./Build install

Faça download do script do github para o seu servidor Nagios(R):

  $ cd /tmp
  $ git clone https://github.com/centreon/nagiosToCentreon.git
  $ cd nagiosToCentreon

Uso
===

Em um servidor Centreon novo, o poller padrão é denominado "Central". Se você quiser renomeá-lo
ou se você quiser ligar esta configuração do Nagios a um poller pré-definido tem que mudar o nome
do poller na linha 65:

  my $default_poller = "Central";

Para mostrar uma ajuda do comando:

  $ perl nagios_reader_to_centreon_clapi.pl --help
  ######################################################
  #    Copyright (c) 2005-2015 Centreon                #
  #    Bugs to http://github.com/nagiosToCentreon      #
  ######################################################

  Usage: nagios_reader_to_centreon_clapi.pl
      -V (--version) Show script version
      -h (--help)    Usage help
      -C (--config)  Path to nagios.cfg file

Para executar o script, por favor use o comando abaixo:

  $ perl nagios_reader_to_centreon_clapi.pl --config /usr/local/nagios/etc/nagios.cfg > /tmp/centreon_clapi_import_commands.txt

Exporte o arquivo /tmp/centreon_clapi_import_commands.txt para o servidor Centreon.

Execute o seguinte comando para importar a configuração para dentro do seu servidor Centreon:

  $ /usr/share/centreon/bin/centreon -u admin -p @PASSWORD -i /tmp/centreon_clapi_import_commands.txt

.. note::
    Substitua **@PASSWORD** pela a senha usada pelo o **admin** do Centreon web.
