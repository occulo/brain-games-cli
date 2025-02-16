install: # install composer dependencies
	composer install

validate: # validate the composer package
	composer validate

lint: # check code against PSR-12
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-games: # run the application
	./bin/brain-games

brain-even: # run the 'is even' game
	./bin/brain-even