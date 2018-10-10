/* File : example.i */
%module example
%{
/* Put headers and other declarations here */
#include "example.cxx"
%}

extern double My_variable;
extern int    fact(int);
extern int    my_mod(int n, int m);

extern int empty;

class webObj {
public:
  int empty;
};
