# Makefile for neap

-include ../../arch.mk
-include ../../../path.mk
-include ../../../.config

##########################################################################
# source for neap

MYNAME      := neap server
APPLET      := neaps
LOCAL_SRCS  := ../neaps.c ../mib_generic.c ../mib_common.c ../hmac_md5.c ../libneap.c
CMLIB_SRCS  := md5.c libxmldbc.c 

##########################################################################

# compiler flags
CFLAGS+=-I$(TOPDIR)/include

ifeq ($(strip $(CONFIG_AP_NEAPS_INTERNET)),y)
CFLAGS+=-DNEAP_MIB_INTERNET_CONNECTION
LOCAL_SRCS+=../mib_internet.c
endif

ifeq ($(strip $(CONFIG_AP_NEAPS_WIRELESS)),y)
CFLAGS+=-DNEAP_MIB_WIRELESS
LOCAL_SRCS+=../mib_wireless.c
endif

ifeq ($(strip $(CONFIG_AP_NEAPS_RESIDENTIAL_GATEWAY)),y)
CFLAGS+=-DNEAP_MIB_RESIDENTIAL_GATEWAY
LOCAL_SRCS+=../mib_rg.c
endif

ifeq ($(strip $(ELBOX_PROGS_PRIV_AP_NEAPS_DCC)),y)
CFLAGS+=-DNEAPS_DCC
endif

ifeq ($(strip $(ELBOX_PROGS_PRIV_AP_NEAPS_RGDB_LOC)),y)
CFLAGS+=-DNEAPS_RGDB_LOC 
endif

-include $(TOPDIR)/Rules.mk

clean: clean_objs
	@echo -e "\033[32mCleaning $(MYNAME) ...\033[0m"
	$(Q)rm -f *~

install:
	@echo -e "\033[32mInstalling $(MYNAME) ...\033[0m"
	$(Q)$(STRIP) $(APPLET)
	$(Q)[ -d $(TARGET)/usr/sbin ] || mkdir -p $(TARGET)/usr/sbin
	$(Q)cp $(APPLET) $(TARGET)/usr/sbin
	
.PHONY: install clean
