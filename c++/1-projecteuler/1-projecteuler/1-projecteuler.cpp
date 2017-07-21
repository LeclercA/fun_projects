// 1-projecteuler.cpp : définit le point d'entrée pour l'application console.
//

#include "stdafx.h"
#include "iostream"


int main()
{
	int sum = 0;
	for (int i = 0; i < 1000; i++) {
		if (i % 3 == 0 || i % 5 == 0) {
			sum += i;
		}
	}
	std::cout << sum;
	std::cin.get();
}

