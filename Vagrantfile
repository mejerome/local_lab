# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "geerlingguy/ubuntu2004"
  config.ssh.insert_key = false
  config.vm.synced_folder ".", "/vagrant", disabled: true

  config.vm.provider "virtualbox" do |vb|
    vb.memory = 512
    vb.cpus = 1
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--ioapic", "on"]
  end

  config.vm.define "web1" do |web1|
    web1.vm.hostname = "web1.local"
    web1.vm.network :private_network, ip: "192.168.3.11"
    web1.vm.provision "ansible" do |ansible|
      ansible.playbook = "playbooks/web/playbook.yml"
    end
  end

  config.vm.define "web2" do |web2|
    web2.vm.hostname = "web2.local"
    web2.vm.network :private_network, ip: "192.168.3.13"
    web2.vm.provision "ansible" do |ansible|
      ansible.playbook = "playbooks/web/playbook.yml"
    end
  end

  config.vm.define "db" do |db|
    db.vm.hostname = "db.local"
    db.vm.network :private_network, ip: "192.168.3.12"
    db.vm.provision "ansible" do |ansible|
      ansible.playbook = "playbooks/db/playbook.yml"
    end
  end

  config.vm.define "haproxy" do |haproxy|
    haproxy.vm.hostname = "haproxy.local"
    haproxy.vm.network :public_network, bridge: "wlp1s0"
    haproxy.vm.provision "ansible" do |ansible|
      ansible.playbook = "playbooks/haproxy/main.yml"
    end
  end
end
