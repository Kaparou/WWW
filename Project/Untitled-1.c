
struct Student{

    char name[15];
    int am;

}

int main(int argc, char *argv[]){

Student pinakas[3][5],student_find;

printf("Give Student's info");
int i,j;
for(i=0;i<3;i++){
    for(j=0;j<5;j++){

        scanf("give name %s", &pinakas[i][j].name);
        scanf("give am %d", &pinakas[i][j].am);

    }
}


scanf("give student to find %s", &student_find.name)
scanf("%d", &student_find.am)
for(i=0;i<3;i++){
    for(j=0;j<5;j++){

        if(pinakas[i][j].am == student_find.am){
            printf("Student is at:", i,j):
        }

    }

}



}