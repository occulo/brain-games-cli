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

brain-calc: # run the 'calculate' game
	./bin/brain-calc

brain-gcd: # run the 'gcd' game
	./bin/brain-gcd

brain-progression: # run the 'progression' game
	./bin/brain-progression

brain-prime: # run the 'is prime' game
	./bin/brain-prime