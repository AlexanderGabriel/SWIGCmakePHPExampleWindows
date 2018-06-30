# SWIG CMake PHP Example for Windows
Example on how to build a SWIG Extension for PHP with CMake on Windows.
Couldn't find any working example for Windows so i created this one ;)
Hope it helps you.

To build this Example, build PHP as descriped here: https://github.com/Microsoft/php-sdk-binary-tools

You need SWIG to make this work.

Current SWIG (3.0.12) has a Problem with building Extensions on Windows with Thread-Safe PHP.

So until SWIG 4.0.0 is released, you need to build SWIG, too.

I have a fork of swig in my github account which enables you to build it with cmake: https://github.com/AlexanderGabriel/swig

Build it and change the path SWIG_EXECUTABLE and SWIG_DIR to your environment.

You can stay inside PHP-SDK-Shell if you want, change directory back to where you checked out this and then execute the following commands.

- mkdir build
- cd build
- cmake ..  -G "NMake Makefiles" -DCMAKE_BUILD_TYPE=Release -Wno-dev -DSWIG_EXECUTABLE=C:\dev\work\swig\swig.exe -DSWIG_DIR=C:\dev\work\swig
- cmake --build .

Thats it.
