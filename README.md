1. Utwórz projekt o dowolnej strukturze. Umieścić w nim plik AbstractCartProvider.php, który można oczywiście modyfikować na potrzeby zadania, ale bez zmieniania samej klasy.
2. Należy dodać klasę Cart, będącą reprezentacją koszyka, oraz imlementację abstrakcyjnej klasy AbstractCartProvider, dostarczającą koszyk z sesji. Nie musisz ograniczać się tylko do 2 klas, jeżelu uznasz to za zasadne.
3. Możesz użyć dowolnych paczek lub frameworku.
4. Dodaj testy jednoskowe wytworzonego kodu. Możesz posłużyć się przeznaczonymi do tego narzędziami, ale nie jest to koniecznością.

Koszyk jest przetrzymywany w sesji w postaci JSON.
'{"cart":{"amount":120,"currency":"PLN","items":[{"name":"Koszulka z
bufiastymi rękawami","price":100,"quantity":1},{"name":"Gumka do
włosów","price":10,"quantity":2}]}}';


MOJE NOTATKI
1. zalozylem bardzo prosto ze waluta jest jedna na caly koszyk, przekazana w sesji
2. i dodalem w kodzie kilka komentarzy w miejscach ktore uznalem za sluszne

```
composer install
./vendor/bin/phpunit Tests
```