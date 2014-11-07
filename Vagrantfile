# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Box
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  # Forwarded Ports
  config.vm.network :forwarded_port, guest: 80, host: 8008 

  # Shared folders
  config.vm.synced_folder "./", "/vagrant",
    owner: "vagrant",
    group: "www-data",
    mount_options: ["dmode=775,fmode=664"]

  # Setup
  config.vm.provision :shell, :inline => "apt-get update --fix-missing"
  config.vm.provision :shell, :inline => "apt-get install -q -y cowsay python-software-properties python g++ make git curl apache2 libapache2-mod-php5"
  config.vm.provision :shell, :inline => "sed -i '/AllowOverride None/c AllowOverride All' /etc/apache2/sites-available/default"
  config.vm.provision :shell, :inline => "sudo a2enmod rewrite"
  config.vm.provision :shell, :inline => "service apache2 restart"
  config.vm.provision :shell, :inline => "add-apt-repository ppa:ondrej/php5 && apt-get update"
  config.vm.provision :shell, :inline => "apt-get install -q -y php5-cli php5-curl"
  config.vm.provision :shell, :inline => "curl -s https://getcomposer.org/installer | php"
  config.vm.provision :shell, :inline => "mv ./composer.phar /usr/local/bin/composer"
  
  # Change Apache Working Directory
  config.vm.provision :shell, :inline => "rm -rf /var/www"
  config.vm.provision :shell, :inline => "ln -fs /vagrant /var/www"

  # Done
  config.vm.provision :shell, :inline => "cowsay \"Your development environment is ready!\""

end