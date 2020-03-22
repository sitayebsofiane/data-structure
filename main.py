
from tri import Tri
import time

tri =  Tri()

#tableau =tri.generer(100000)
#print(tableau)
t1 = time.time()
#tableau = tri.insertion(tableau)
print('********************************************apres tri a bulle***********************************')
print(tri.calcule(150000))
t2 = time.time()
print("le temps d'execution",(t2-t1))