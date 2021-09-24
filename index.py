#!C:/Users/hp/AppData/Local/Programs/Python/Python39/python.exe
from zipfile import ZipFile  # for making zip file
import json
import time
import os
import sys
import fitz as ft
import cgi
print()
img_name = sys.argv[1]
folder_name = sys.argv[2]
page_set=sys.argv[3]
page_set=int(page_set)
# print(img_name,",",folder_name,",",page_set)
if(page_set==1):
    start_page=int(sys.argv[4])
    end_page=int(sys.argv[5])
    # print(img_name,",",folder_name,",",page_set,start_page,end_page)
    # print("yes")
# print("no")
image_list_names=set()
mydir = os.getcwd()  # would be the MAIN folder
# print("my old dir", mydir,"foldername=",folder_name)
mydir_tmp = mydir + "//" + folder_name  # add the testA folder name
mydir_new = os.chdir(mydir_tmp)  # change the current working directory
mydir = os.getcwd()  # set the main directory again, now it calls testA
# print("my new dir", mydir)
rootdir = mydir
substr=img_name
zipname=substr + '.zip'
zipObj = ZipFile(zipname, 'w')
totalImage=0

folders_list=set()
for file in os.listdir(rootdir):
    d = file
    if (os.path.isdir(d)==False):
        if d[-3:]=="pdf":
            folders_list.add(d)

for file in folders_list:
        # print("my filename=", file)
        pdf=ft.open(file)
        if(page_set==1):
            j=start_page-1
            k=end_page-1
            if(j>k):
                j=0
                k=len(pdf)-1
            if(k>len(pdf) or k<0):
                k=len(pdf)-1
            if(j>len(pdf)):
                j=len(pdf)-1
        else:
            j=0
            k=len(pdf)-1
        # print(j,k)
        for i in range(j,k+1):
            image_list=(pdf.getPageImageList(i))
            for image in image_list:
                xref =  image[0]
                pix = ft.Pixmap(pdf, xref)
                if pix.n<5:
                    pix.writePNG("%s_%s.png" % (substr,totalImage+1))
                    img_name=substr+"_" + str(totalImage+1) + ".png"
                    image_list_names.add(img_name)
                    totalImage=totalImage+1
                    zipObj.write(img_name)
                else:
                    pix1= ft.Pixmap(ft.csRGB, pix)
                    pix1.writePNG("%s_%s.png" % (substr,totalImage+1))
                    img_name=substr+"_" + str(totalImage+1) + ".png"
                    image_list_names.add(img_name)
                    totalImage=totalImage+1
                    zipObj.write(img_name)
                    pix1=None
                pix=None
        pdf.close()
zipObj.close()
print(len(image_list_names))
for image in image_list_names:
    print(image)
# print(image_list_names)
print(zipname)
print("1")


# b= '<h1>',totalImage,'detected</h1>'
# c="<h1>finish</h1>"
# print(json.dumps([a,b,c]))

        # header("Location: https://www.google.com/"); not to open
# import webbrowser
# webbrowser.open('https://www.google.com/')  # Go to example.com


# time.sleep(60)
# for image in image_list_names:
#     myfile=image
#     ## If file exists, delete it ##
#     if os.path.isfile(myfile):
#         os.remove(myfile)


# http://localhost/python/index.py?j=1&k=6
# CREATE EVENT myevent
#     ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
#     DO
#       delete from works_on WHERE HOURS=1;CREATE EVENT myevent
#     ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
#     DO
#       delete from works_on WHERE HOURS=1;


# js main likhenge ajax jhan pr ajax se click se call krenge hm ek php page ko jo ki call krega python ko and python image nikalkr zip bnakr ok ka msg bhej degi or error ka msg bhej degi usi ke according hm msg dikha denge ki hmne zip file ready h and uske page pr images ko bhi dikha denge
# hm hr seperate pdf ke liye alag folder bnayenge and uske name main timestamp lga denge time of creation ki then usme hm 1min m corn lga denge jisse ek php execute hua kregi and bo delete kr diya kregi current time stamp ke according jo 1 hr se jada hua jaya krega jise use and hm hr user ka uske ip address se session bna diya krenge jisse ki ek hour tk use bo dikha kre and 1 hr baad php us folder ko uda diya kregi.


# page ->
# click ->
# function ->
# session according to ip || ajax ->
# .php ->
# .py =>
# .php =>
# ajax =>
# function =>
# according to this gives the option to download and gallery on page
# //// 1hr baad corn->
# .php ->
# delete the folder
