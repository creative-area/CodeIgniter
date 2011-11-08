Creative Area CodeIgniter
=========================

Merci de bien vérifier que vous travaillez sur la branche `master` en local.

Installation
------------

1 - Cloner le fork CodeIgniter de Creative Area
	
	$ git clone git@github.com:creative-area/CodeIgniter.git

2 - Pour pouvoir mettre à jour notre fork en cas de mise à jour du repo originel, il faut ajouter un nouveau remote que nous nomons `upstream`

	$ git remote add upstream git://github.com/EllisLab/CodeIgniter.git

2bis - Si le projet original est modifié et que l'on souhaite mettre à jour notre fork 

	$ git fetch upstream
	$ git merge upstream/master