Vagrant.configure("2") do |config|
  config.vm.box = "bento/ubuntu-18.04"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder ".", "/var/www", owner: "www-data", group: "www-data"
  config.vm.provision "shell", path: "provision.sh"
end

# Note: composer runs very slowly and npm runs badly in VM
# Use these on the host