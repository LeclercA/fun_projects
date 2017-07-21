// 2-projecteuler.cpp : définit le point d'entrée pour l'application console.
//

#include "stdafx.h"
#include "iostream"

int main()
{
	int a = 1;
	int fibonacci = 2;
	int temp;
	int sum = 0;
	while (fibonacci < 4000000) {
		if (fibonacci % 2 == 0) {
			sum += fibonacci;
		}
		temp = a + fibonacci;
		a = fibonacci;
		fibonacci = temp;
	}
	std::cout << sum;
	std::cin.get();
}

