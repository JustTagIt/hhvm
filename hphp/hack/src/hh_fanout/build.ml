(*
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *)

external hh_fanout_build_main : string option -> string -> string -> unit
  = "hh_fanout_build_main"

let go ~incremental ~edges_dir ~output =
  hh_fanout_build_main incremental edges_dir output;
  Lwt.return_unit
