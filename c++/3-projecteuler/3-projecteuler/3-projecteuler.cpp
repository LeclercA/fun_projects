// 3-projecteuler.cpp : définit le point d'entrée pour l'application console.
//

#include "stdafx.h"
#include "iostream"
#include "vector"

bool isPrime(int number) {
	int i = 2;
	bool notFound = true;
	while (i < number && notFound && number / i >= i) {
		if (number % i != 0) {
			i++;
		}else {
			notFound = false;
		}
	}
	return notFound;

}

int main()
{
	long factor = 600851475143;
	if (isPrime(101)) {
		std::cout << "yes";
	}else{ 
		std::cout << "non";
	}
	std::cin.get();
}



