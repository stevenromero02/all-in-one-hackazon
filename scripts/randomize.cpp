#include <iostream>
#include <fstream>

using namespace std;

int main() {

	ifstream inSeed;
	ifstream inVuln

	inSeed.open("./seed");
	inVuln.open("/var/www/hackazon/VULNERABILITIES");
	
    if (!inSeed || !inVuln) {
        cout << "Unable to randomize lab; conduct your instructor for assistance.";
        exit(1); // terminate with error
	}
	
	else {
        