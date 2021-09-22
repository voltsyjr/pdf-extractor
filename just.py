#!C:/Users/hp/AppData/Local/Programs/Python/Python39/python.exe
print()
import cgi
import fitz as ft
from zipfile import ZipFile         #for making zip file
import sys
import os
import time
import json
# fs = cgi.FieldStorage()
# j=int(fs["j"].value)         #starting page
# k=int(fs["k"].value)         #ending page
# img_name =sys.argv[1]
# folder_name=sys.argv[2]
# print(sys.argv[1],sys.argv[2])







folder_name="pdf//123456789-1632334159"
rootdir = folder_name
folders_list=set()
for file in os.listdir(rootdir):
    d = file
    if (os.path.isdir(d)==False):
        if d[-3:]=="pdf":
            folders_list.add(d)

for fl in folders_list:
    print(fl)

# change working directory of python      
mydir = os.getcwd() # would be the MAIN folder
print(mydir)
# mydir_tmp = mydir + "//" + folder_name # add the testA folder name
# mydir_new = os.chdir(mydir_tmp) # change the current working directory
# mydir = os.getcwd() # set the main directory again, now it calls testA
















































































# # change working directory of python      
# mydir = os.getcwd() # would be the MAIN folder
# mydir_tmp = mydir + "//" + folder_name # add the testA folder name
# mydir_new = os.chdir(mydir_tmp) # change the current working directory
# mydir = os.getcwd() # set the main directory again, now it calls testA





# # print ("<h1>hello world</h1>")
# # a="<h1>hello world</h1>"


# file = 'test.pdf'
# substr='z'
# zipname=substr + '.zip'
# zipObj = ZipFile(zipname, 'w')
# pdf=ft.open(file)
# totalImage=0







# j=1
# k=10
# image_list_names=set()
# if(k>len(pdf)):      
#     k=len(pdf)-1
# for i in range(j,k+1):
#     image_list=(pdf.getPageImageList(i))
#     for image in image_list:   
#         xref =  image[0]
#         pix = ft.Pixmap(pdf, xref)
#         if pix.n<5:   
#             pix.writePNG("%s_%s.png" % (substr,totalImage+1))
#             img_name=substr+"_" + str(totalImage+1) + ".png"
#             image_list_names.add(img_name)
#             totalImage=totalImage+1
#             zipObj.write(img_name)
#         else:   
#             pix1= ft.Pixmap(ft.csRGB, pix)
#             pix1.writePNG("%s_%s.png" % (substr,totalImage+1))
#             img_name=substr+"_" + str(totalImage+1) + ".png"
#             image_list_names.add(img_name)
#             totalImage=totalImage+1
#             zipObj.write(img_name)
#             pix1=None
#         pix=None 
# zipObj.close()

# # print('<h1>',totalImage,'detected</h1>')
# # print("<h1>finish</h1>")


# b= '<h1>',totalImage,'detected</h1>'
# c="<h1>finish</h1>"
# print(json.dumps([a,b,c]))










#             # header("Location: https://www.google.com/"); not to open
# # import webbrowser
# # webbrowser.open('https://www.google.com/')  # Go to example.com



# # time.sleep(60)
# # for image in image_list_names:
# #     myfile=image
# #     ## If file exists, delete it ##
# #     if os.path.isfile(myfile):
# #         os.remove(myfile)



















# # http://localhost/python/index.py?j=1&k=6
# # CREATE EVENT myevent
# #     ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
# #     DO
# #       delete from works_on WHERE HOURS=1;CREATE EVENT myevent
# #     ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 HOUR
# #     DO
# #       delete from works_on WHERE HOURS=1;









# # js main likhenge ajax jhan pr ajax se click se call krenge hm ek php page ko jo ki call krega python ko and python image nikalkr zip bnakr ok ka msg bhej degi or error ka msg bhej degi usi ke according hm msg dikha denge ki hmne zip file ready h and uske page pr images ko bhi dikha denge 
# # hm hr seperate pdf ke liye alag folder bnayenge and uske name main timestamp lga denge time of creation ki then usme hm 1min m corn lga denge jisse ek php execute hua kregi and bo delete kr diya kregi current time stamp ke according jo 1 hr se jada hua jaya krega jise use and hm hr user ka uske ip address se session bna diya krenge jisse ki ek hour tk use bo dikha kre and 1 hr baad php us folder ko uda diya kregi.


# # page ->   
# # click ->    
# # function ->     
# # session according to ip || ajax ->      
# # .php ->     
# # .py =>  
# # .php =>     
# # ajax =>     
# # function =>     
# # according to this gives the option to download and gallery on page    
# # //// 1hr baad corn->
# # .php ->
# # delete the folder