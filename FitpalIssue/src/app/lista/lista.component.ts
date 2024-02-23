import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-lista',
  standalone:true,
  templateUrl: './lista.component.html',
  styleUrls: ['./lista.component.scss'],
})
export class ListaComponent  implements OnInit {
    
  title = 'FitpalIssue';
  constructor() { }

  ngOnInit() {}

}

