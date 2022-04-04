﻿using eCommerce.API.Models;
using eCommerce.API.Repositories;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace eCommerce.API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UsuariosController : ControllerBase
    {
        private IUsuarioRepository _repository;
        public UsuariosController()
        {
            _repository = new UsuarioRepository();
        }

        [HttpGet]
        public IActionResult GetUsuario()
        {
            return Ok(_repository.Get());
        }

        [HttpGet("{id}")]
        public IActionResult GetUsuario(int id)
        {
            var usuario = Ok(_repository.GetUsuario(id));
            if (usuario == null)
            {
                return NotFound();
            }

            return Ok(usuario);
        }

        [HttpPost]
        public IActionResult InsertUsuario([FromBody]Usuario usuario)
        {
            _repository.InsertUsuario(usuario);
            return Ok(usuario);
        }
        [HttpPut]
        public IActionResult UpdateUsuario([FromBody] Usuario usuario)
        {
            _repository.UpdateUsuario(usuario);
            return Ok(usuario);
        }
        [HttpDelete("{id}")]
        public IActionResult DeleteUsuario(int id)
        {
            _repository.DeleteUsuario(id);
            return Ok();
        }
    }
}
