import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ClaseService } from '../services/clase.service';

@Component({
  selector: 'app-lista',
  templateUrl: './lista.component.html',
  styleUrls: ['./lista.component.scss'],
  standalone: true,
  imports: [CommonModule, FormsModule],
})
export class ListaComponent implements OnInit {
  clases: any = [];
  nuevaClase: any = {
    nombre: '',
    descripcion: '',
    horario: ''
  };

  constructor(private claseService: ClaseService) {}

  ngOnInit(): void {
    this.cargarClases();
  }

  cargarClases(): void {
    this.claseService.getClases().subscribe(
      data => {
        this.clases = data;
      },
      error => {
        console.error(error);
      }
    );
  }

  crearClase(): void {
    this.claseService.crearClase(this.nuevaClase).subscribe(
      response => {
        console.log('Clase creada', response);
        this.clases.push(response);
        this.nuevaClase = { nombre: '', descripcion: '' };
      },
      error => {
        console.error('Error al crear classe', error);
      }
    );
  }

  eliminarClase(id: number): void {
    this.claseService.eliminarClase(id).subscribe(() => {
      this.clases = this.clases.filter((clase: any) => clase.id !== id);
    }, (error) => {
      console.error('Error al eliminar clase', error);
    });
  }
}
