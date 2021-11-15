## Single Responsiblity Principle
A class should have one, and only one reason to change. More simply, each class should solve only one problem. 

## Open Closed Principle
Open for extension meaning that the class's behavior can be extended; and closed for modification, meaning that the source code is set and can't be changed. 

## Liskov Substitution Principle

## Interface Segregation Principle
The general idea of interface segreation principle is that it's better to have a lot of smaller interface than a few bigger/fat ones.
Make fine grained interface that are client-specifice. Client should not be implement interfaces they don't use.

For software engineering's this means that you don't want to just start with an existing interface and add new methods. Instead, start by building a new interface. 
and then let your class implement multiple interfaces as needed smaller interfaces. 

According to this principle, engineers should work to have many client-specific interfaces, avoiding the temptation of having one big, general purpose interface. 
