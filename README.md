# SWIG CMake PHP Example for Windows
Example on how to build a SWIG/PHP Extension with CMake on Windows.

Couldn't find any working example even without CMake for Windows so i created this one ;)
Hope it helps others.

You need Visual Studio installed.
For current Version of PHP, you need current Version of VS2017 (Community Edition is okay) 
To build this Example, build PHP as descriped here: https://github.com/Microsoft/php-sdk-binary-tools

You need SWIG to make this work.

Current SWIG (3.0.12) has a Problem with building Extensions on Windows with Thread-Safe PHP.

So until SWIG 4.0.0 is released, you need to build SWIG, too.

I have a fork of swig in my github account which enables you to build it with cmake: https://github.com/AlexanderGabriel/swig

Build it and change the path SWIG_EXECUTABLE and SWIG_DIR to your environment.

You can stay inside PHP-SDK-Shell if you want or open a new x64/x86 Native Tools Command Prompt for VS 2017.
Change directory back to where you checked out this and then execute the following commands.

```
mkdir build
cd build
cmake ..  -G "NMake Makefiles" -DCMAKE_BUILD_TYPE=Release -Wno-dev -DSWIG_EXECUTABLE=C:\dev\work\swig\swig.exe -DSWIG_DIR=C:\dev\work\swig
cmake --build .
```

Thats it.
To see all commands, have a look into appveyor.yml