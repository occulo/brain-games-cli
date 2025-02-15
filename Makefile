# install composer dependencies
install:
	composer install

# validate the composer package
validate:
	composer validate

# run the application
brain-games:
	./bin/brain-games