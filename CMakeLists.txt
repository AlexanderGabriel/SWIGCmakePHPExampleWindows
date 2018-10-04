cmake_minimum_required(VERSION 3.11)
FIND_PACKAGE(SWIG 3.0.11 REQUIRED)
INCLUDE(${SWIG_USE_FILE})

if(WIN32)
add_definitions(/D_WIN32 /D_WINDOWS /DWINDOWS=1 /DZEND_WIN32=1 /DPHP_WIN32=1 /DWIN32 /DNDebug /DNDEBUG /DZEND_DEBUG=0 /DZTS=1)
if(NOT CMAKE_CL_64)
add_definitions(-D_USE_32BIT_TIME_T)
endif(NOT CMAKE_CL_64)
ENDIF(WIN32)
string(SUBSTRING $ENV{VSCMD_VER} 0 2 VSCMD_VER)

include_directories (C:/php-sdk/phpmaster/vc${VSCMD_VER}/$ENV{VSCMD_ARG_TGT_ARCH}/php-src)
include_directories (C:/php-sdk/phpmaster/vc${VSCMD_VER}/$ENV{VSCMD_ARG_TGT_ARCH}/php-src/main)
include_directories (C:/php-sdk/phpmaster/vc${VSCMD_VER}/$ENV{VSCMD_ARG_TGT_ARCH}/php-src/Zend)
include_directories (C:/php-sdk/phpmaster/vc${VSCMD_VER}/$ENV{VSCMD_ARG_TGT_ARCH}/php-src/TSRM)
include_directories (${CMAKE_CURRENT_SOURCE_DIR})

add_library(example STATIC example.c)
swig_add_library(php_example TYPE MODULE LANGUAGE php7 SOURCES example.i)
target_compile_options(php_example PRIVATE /D_WIN32 /D_WINDOWS /DWINDOWS=1 /DZEND_WIN32=1 /DPHP_WIN32=1 /DWIN32 /DNDebug /DNDEBUG /DZEND_DEBUG=0 /DZTS=1)

target_link_libraries(php_example "C:/php-sdk/phpmaster/vc${VSCMD_VER}/$ENV{VSCMD_ARG_TGT_ARCH}/php-src/x64/Release_TS/php7ts.lib")
target_link_libraries(php_example example)
